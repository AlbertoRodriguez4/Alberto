package com.example.a1_appandroid;

import androidx.appcompat.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class MainActivity extends AppCompatActivity {
    private EditText edtUser;
    private EditText edtPassword;
    private Button btnSignin;

    /*CICLO DE VIDA: ONLOAD JAVASCRIPT*/
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        //document.getElementById("userId)
        EditText edtUser = findViewById(R.id.edtUser);
        EditText edtPassword = findViewById(R.id.edtPassword);
        Button btnSignin = findViewById(R.id.btnSignin);
        btnSignin.setOnClickListener(new View.OnClickListener() {

            @Override
            public void onClick(View v) {

            }
        }
    }
}