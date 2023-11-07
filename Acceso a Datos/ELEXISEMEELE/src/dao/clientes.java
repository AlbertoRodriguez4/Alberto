package dao;

import interfaces.IDao;
import motor.MotorSQL;
import org.w3c.dom.Node;
import org.w3c.dom.NodeList;

public class clientes implements IDao {
    private MotorSQL motorSQL;

    public clientes(MotorSQL motorSQL) {
        this.motorSQL = motorSQL;
    }


    public void ejecutar(String accion) {
        motorSQL.conectar();
        switch (accion) {
            case "MOSTRAR":
                String XMLMos = traducir();
                break;
            case "EXPORTAR":
                String XMLExp = traducir();
                //exportar(XMLExp, "clientes");
                break;
            case "IMPORTAR":
                String XMLImp = traducir();
                NodeList lista = XmlToSQL(XMLImp, )
        }
    }

    @Override
    public String traducir() {
        return null;
    }

    @Override
    public void insertar(NodeList lista) {

    }
}
