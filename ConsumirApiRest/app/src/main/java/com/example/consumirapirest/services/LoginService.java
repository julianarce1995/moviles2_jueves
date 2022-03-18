package com.example.consumirapirest.services;

import com.example.consumirapirest.models.LoginModel;
import com.example.consumirapirest.models.LoginRequest;

import retrofit2.Call;
import retrofit2.http.Body;
import retrofit2.http.POST;

public interface LoginService {

    @POST("login/login.php")
    Call<LoginModel> login(@Body LoginRequest loginRequest);
}
