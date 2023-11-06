/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package interfaces;

import java.sql.ResultSet;

/**
 *
 * @author altf4
 */
public interface IMotor {

    public void connect();

    public ResultSet executeQuery(String SQL);

    public int updateQuery(String SQL);
    
    public void disconnect();

}
