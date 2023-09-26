package java.action;

import com.google.gson.Gson;

import javax.servlet.http.HttpServletRequest;
import java.DAO.ClienteDAO;
import java.interfaces.IAction;
import java.model.Cliente;

public class clienteAction implements IAction {
    Gson gson = new Gson();
    @Override
    public String execute(HttpServletRequest req, String Action) {
    String json = "";
    switch (Action) {
        case "UPDATE":
            json = update(req);
            break;
        case "DELETE":
            json = delete(req);
            break;
        case "ADD":
            json = add(req);
    }
        return json ;
    }

    @Override
    public String update(HttpServletRequest req) {
    String json = "";
    String name = req.getParameter("NAME");
    String DNI = req.getParameter("DNI");
    String surname = req.getParameter("SURNAME");
    String direccion = req.getParameter("DIRECCION");
    String fechaNac = req.getParameter("FECHANAC");
    Cliente cliente = new Cliente(DNI, name, surname, fechaNac, direccion);
    int filasModificadas = new ClienteDAO().update(cliente);
    json = gson.toJson(filasModificadas);
    return json;
    }

    @Override
    public String add(HttpServletRequest req) {
        String json = "";
        String name = req.getParameter("NAME");
        String DNI = req.getParameter("DNI");
        String surname = req.getParameter("SURNAME");
        String direccion = req.getParameter("DIRECCION");
        String fechaNac = req.getParameter("FECHANAC");
        Cliente cliente = new Cliente(DNI, name, surname, fechaNac, direccion);
        int filasModificadas = new ClienteDAO().add(cliente);
        json = gson.toJson(filasModificadas);
        return json;
    }

    @Override
    public String delete(HttpServletRequest req) {
    String json = "";
    String DNI = req.getParameter("DNI");
    Cliente cliente = new Cliente(DNI);
    int filasModificadas = new ClienteDAO().delete(cliente);
    json = gson.toJson(filasModificadas);
    return json;
    }

    public static void main(String[] args) {
        System.out.println("ESTOPA");
    }
}
