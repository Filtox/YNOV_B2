public class Vehicle {
    int numberOfWheels = 4;
    String color = "white";

    public Vehicle(int numberOfWheels, String color) {
       this.numberOfWheels = numberOfWheels;
       this.color = color;
    }

    @Override
    public String toString() {
        return numberOfWheels + " " + color;
    }
}
