package com.ynov.model.Motorcycle;

public class Motorcycle {
    int numberOfWheels = 2;
    String color = "white";

    @Override
    public String toString() {
        return "number of wheels = " + numberOfWheels +
                ", color = " + color + '\'';
    }
}
