package com.example.loginandroid_29_09_2023.lst_films.model.entities;


import retrofit2.Call;
import retrofit2.http.GET;

public interface MoviesAPI {
    @GET("movie/popular?api_key=7ef657cde05441feb8e8f34f9bc7861d")
    Call<MovieResponse> getPopularMovies();

}
