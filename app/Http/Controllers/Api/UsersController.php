<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Access\User\User;
use Response;
use Carbon;
use App\Repositories\Backend\User\UserContract;
use App\Repositories\Backend\UserNotification\UserNotificationRepositoryContract;
use App\Http\Transformers\UserTransformer;
use App\Http\Utilities\FileUploads;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuthExceptions\JWTException;
use App\Http\Controllers\Api\BaseApiController;
use App\Repositories\Inquiry\EloquentInquiryRepository;
use Auth;

class UsersController extends BaseApiController 
{
    protected $userTransformer;
    /**
     * __construct
     */
    public function __construct()
    {
        $this->userTransformer = new UserTransformer;
    }

    /**
     * Login request
     * 
     * @param Request $request
     * @return type
     */
    public function login(Request $request) 
    {
        $credentials = $request->only('email', 'password');

        try {
            // verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong
            return response()->json(['error' => 'could_not_create_token'], 500);
        }
        
        $user = Auth::user()->toArray();

        $userData = array_merge($user, ['token' => $token]);

        $responseData = $this->userTransformer->transform((object)$userData);

        // if no errors are encountered we can return a JWT
        return response()->json($responseData);
    }

    /**
     * Logout request
     * @param  Request $request
     * @return json
     */
    public function logout(Request $request) 
    {
        $userId = $request->header('UserId');
        $userToken = $request->header('UserToken');
        $response = $this->users->deleteUserToken($userId, $userToken);
        if ($response) {
            return $this->ApiSuccessResponse(array());
        } else {
            return $this->respondInternalError('Error in Logout');
        }
    }

    /**
     * Submit Inquiry
     * 
     * @param object $request
     * @return json
     */
    public function submitInquiry(Request $request)
    {
        if($request->get('name'))
        {
            $data = [   
                'name'              => $request->get('name'),
                'emailid'           => $request->get('emailid'),
                'contact_number'    => $request->get('contact_number'),
                'description'       => $request->get('description'),
                'budget'            => $request->get('budget'),
                'country'           => $request->get('country'),
                'lat'               => $request->get('lat'),
                'long'              => $request->get('long')
            ];

            $repository = new EloquentInquiryRepository;   

            $status = $repository->create($data);

            if($status)
            {
                $output = [
                    'message' => "Inquiry submitted successfully !"
                ];

                return $this->successResponse($output);
            }
        }

         return $this->setStatusCode(400)->failureResponse([
                'message' => 'Something went wrong !'
                ], 'Fail to Submit Inquiry!');
    }

}
