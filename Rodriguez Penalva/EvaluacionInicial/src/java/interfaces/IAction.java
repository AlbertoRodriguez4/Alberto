package java.interfaces;

import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;

public interface IAction  {
    public String execute (HttpServletRequest req, String Action);
    public String update (HttpServletRequest req);
    public String add (HttpServletRequest req);
    public String delete (HttpServletRequest req);

}
