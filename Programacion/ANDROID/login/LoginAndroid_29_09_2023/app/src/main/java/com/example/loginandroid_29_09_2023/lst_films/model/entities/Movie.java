package com.example.loginandroid_29_09_2023.lst_films.model.entities;

public class Movie {
    private static String ID = "ID";

    @RequestParam ("ID")
    private int id;
    
    private String title, overview, poster_path;
}
