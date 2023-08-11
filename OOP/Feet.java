package OOP;

import OOP.Interfaces.IFeet;

public class Feet implements IFeet{

    @Override
    public void walk() {
        System.out.println("走路");
    }
    
}
