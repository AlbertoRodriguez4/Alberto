package com.example.loginandroid_29_09_2023.login_user;

public interface Contract {
    public interface View {
        void successLogin(User user);

        void failureLogin(String error);
        //void failureLogin(MyException err);
    }

    public interface Presentar {
        //void login(String email, String pass);
        void login(User user);
        //void login(ViewUser viewUser);

    }

    public interface Model {
        interface OnLoginUserListener {
        void onFinished(User user);
        void onFailure(String err);
        }
        void loginAPI (User user, OnLoginUserListener onLoginUserL);
    }
}
