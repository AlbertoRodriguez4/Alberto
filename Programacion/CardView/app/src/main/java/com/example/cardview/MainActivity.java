package com.example.cardview;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.GridLayoutManager;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.os.Bundle;

import java.lang.reflect.Array;
import java.util.ArrayList;

public class MainActivity extends AppCompatActivity {

    ArrayList<recycleview_list> recycleview_lists;
    RecyclerView recyclerView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        recyclerView = findViewById(R.id.recyclerView);
        recyclerView.setHasFixedSize(true);
        recyclerView.setLayoutManager(new GridLayoutManager(this, 2));

        recycleview_lists = new ArrayList<>(recycleview_lists);
        recycleview_lists.add(new recycleview_list(R.drawable.english, "English"));
        recycleview_lists.add(new recycleview_list(R.drawable.art, "art"));
        recycleview_lists.add(new recycleview_list(R.drawable.sport, "sport"));
        recycleview_lists.add(new recycleview_list(R.drawable.history, "history"));
        recycleview_lists.add(new recycleview_list(R.drawable.geography, "geography"));
        recycleview_lists.add(new recycleview_list(R.drawable.math, "math"));
        recycleview_lists.add(new recycleview_list(R.drawable.tech, "tech"));
        recycleview_lists.add(new recycleview_list(R.drawable.science, "science"));


        recyclerviewer_adapter recyclerviewer_adapter = new recyclerviewer_adapter(recycleview_lists, this);
        recyclerView.setAdapter(recyclerviewer_adapter);
    }
}