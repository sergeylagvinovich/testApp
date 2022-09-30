<?php

namespace App\Http\Controllers;

class ApiController extends Controller
{

    private $tempUsers = [
        [
            "id"=>1,
            "name"=>"name1",
            "lastName"=>"lastName1",
            "patronymic"=>'patronymic1',
            'gender'=>1,//1-Мужской 2-Женский
            'wages'=>12,
            'departments'=>"Отдел 1, отдел 2 ... отдел 3"
        ],
        [
            "id"=>2,
            "name"=>"name",
            "lastName"=>"lastName",
            "patronymic"=>'patronymic',
            'gender'=>1,//1-Мужской 2-Женский
            'wages'=>12,
            'departments'=>"Отдел 1, отдел 2 ... отдел 3"
        ],
        [
            "id"=>3,
            "name"=>"name",
            "lastName"=>"lastName",
            "patronymic"=>'patronymic',
            'gender'=>1,//1-Мужской 2-Женский
            'wages'=>12,
            'departments'=>"Отдел 1, отдел 2 ... отдел 3"
        ]
    ];

    public function getUsers(){
        $responseSuccess = [
            'data'=>$this->tempUsers,
            'status'=>200,
        ];

        $responseError = [
            'message'=>"Сообщение об ошибке",
            'status'=>500,
        ];
        return response()->json($responseSuccess,$responseSuccess["status"]);
    }

    private $tempUser =
        [
            "id"=>1,
            "name"=>"name1",
            "lastName"=>"lastName1",
            "patronymic"=>'patronymic1',
            'gender'=>1,//1-Мужской 2-Женский
            'wages'=>12,
            'departments'=>[
                [
                    'id'=>1,
                    'name'=>"Department"
                ],
                [
                    'id'=>2,
                    'name'=>"Department"
                ],
                [
                    'id'=>3,
                    'name'=>"Department"
                ]
            ]
        ];



    public function getUser($id){

        $responseSuccess = [
            'data'=>$this->tempUser,
            'status'=>200,
        ];

        $responseError = [
            'message'=>"Сообщение об ошибке",
            'status'=>500,
        ];
        return response()->json($responseSuccess,$responseSuccess["status"]);
    }


    private $tempDepartments = [
        [
            "id"=>1,
            "name"=>1,
            "countUsers"=>1,
            "maxWaste"=>1,
        ],
        [
            "id"=>2,
            "name"=>435,
            "countUsers"=>1,
            "maxWaste"=>1,
        ],
        [
            "id"=>3,
            "name"=>123,
            "countUsers"=>1,
            "maxWaste"=>1,
        ]

    ];
    public function getDepartments(){

        $responseSuccess = [
            'data'=>$this->tempDepartments,
            'status'=>200,
        ];

        $responseError = [
            'message'=>"Сообщение об ошибке",
            'status'=>500,
        ];
        return response()->json($responseSuccess,$responseSuccess["status"]);
    }

    private $tempDepartmentsForUser = [
        [
            'id'=>1,
            'name'=>"Department"
        ],
        [
            'id'=>2,
            'name'=>"Department"
        ],
        [
            'id'=>3,
            'name'=>"Department"
        ]
    ];

    public function getDepartmentsForUsers(){

        $responseSuccess = [
            'data'=>$this->tempDepartmentsForUser,
            'status'=>200,
        ];

        $responseError = [
            'message'=>"Сообщение об ошибке",
            'status'=>500,
        ];
        return response()->json($responseSuccess,$responseSuccess["status"]);
    }

    public function getDepartment(){

        $responseSuccess = [
            'data'=>$this->tempDepartments[0],
            'status'=>200,
        ];

        $responseError = [
            'message'=>"Сообщение об ошибке",
            'status'=>500,
        ];
        return response()->json($responseSuccess,$responseSuccess["status"]);
    }
}
