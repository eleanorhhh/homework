package OOP;

import OOP.Interfaces.IBody;

public class Body implements IBody{

    @Override
    public void consume() {
        System.out.println("消化");
    }
    
}
