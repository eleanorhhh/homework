package OOP;

import OOP.Interfaces.IFeet;

public class Main {
    public static void main(String[] args) {
        Dinosaur dinosaur = new Dinosaur(new IronHead(), new Ironhand(), new Body(), new Ironfeet());
        dinosaur.head.see();
        dinosaur.hand.cawl();
        dinosaur.body.consume();
        dinosaur.feet.walk();
    }
}
