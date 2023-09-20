package java.interfaces;

import java.util.ArrayList;

public interface IDAO<E,I> {
    public ArrayList<E> find (E bean);
    public ArrayList<E> findall();
    public int add(E bean);
    public int delete(E bean);
    public int update(E bean);

}
