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

    public function getUser($id){
        $responseSuccess = [
            'data'=>$this->tempUsers[0],
            'status'=>200,
        ];

        $responseError = [
            'message'=>"Сообщение об ошибке",
            'status'=>500,
        ];
        return response()->json($responseSuccess,$responseSuccess["status"]);
    }
}
