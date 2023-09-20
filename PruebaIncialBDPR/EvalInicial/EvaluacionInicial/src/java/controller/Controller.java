package java.controller;


import java.action.clienteAction;
import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet(name = "Controller", urlPatterns = {"/Controller"})
public class Controller extends HttpServlet {
    protected void processRequest(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException{
        response.setContentType("text/html;charset=UTF-8");
        String json = "";
        String action = request.getParameter("Action");
        String[] splittedAction = action.split("\\.");
        PrintWriter pw = response.getWriter();
        switch (splittedAction[0]) {
            case "CLIENTE":
                json = new clienteAction().execute(request, splittedAction[1]);
                break;
        }
    pw.print(json);
    }
    //Testeo De Cambios
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {

    }

    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {

    }
}