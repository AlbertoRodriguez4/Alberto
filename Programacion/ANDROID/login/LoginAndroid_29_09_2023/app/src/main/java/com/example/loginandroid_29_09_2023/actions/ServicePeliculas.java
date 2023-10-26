package com.example.loginandroid_29_09_2023.actions;

import com.example.loginandroid_29_09_2023.lst_films.model.entities.MovieResponse;
import com.example.loginandroid_29_09_2023.retrofit.RetrofitClient;

import retrofit2.Call;

public class ServicePeliculas {

    private ViewPeliculas view;

    public ServicePeliculas(ViewPeliculas view) {
        this.view = view;
    }

    void getDatosPeliculas() {
        Call<MovieResponse> call = RetrofitClient.getInstance().getPopularMovies();
        view.showPeliculas("Los datos han ido bien: ['films': {''}]");

        // fetch ("url=http://")-->
        // json
        /*@Override
        public void*/

    }
}
