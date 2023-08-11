package OOP;

import OOP.Interfaces.IBody;
import OOP.Interfaces.IFeet;
import OOP.Interfaces.IHand;
import OOP.Interfaces.IHead;

public class Dinosaur {
    public IHead head;
    public IHand hand;
    public IBody body;
    public IFeet feet;
    Dinosaur(IHead head, IHand hand, IBody body, IFeet feet){
        this.head = head;
        this.hand = hand;
        this.body = body;
        this.feet = feet;
    }
}
