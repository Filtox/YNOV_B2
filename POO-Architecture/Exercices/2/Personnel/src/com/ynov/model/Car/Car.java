package com.ynov.model.Car;

public class Car {
    int numberOfWheels = 4;
    String color = "white";

    @Override
    public String toString() {
        return "number of wheels = " + numberOfWheels +
                ", color = '" + color + '\'';
    }
}
