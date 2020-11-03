package com.ynov.model;

import java.util.ArrayList;
import java.util.Iterator;
import java.util.List;

public class Concession {
    public Iterator<Vehicle> getVehicules() {
        return vehicles.iterator();
    }

    private int numberOfVehicles = 0;

    private List<Vehicle> vehicles = new ArrayList<>();

    private String name;

    public void addVehicle(Vehicle vehicle) {
        vehicles.add(vehicle);
    }

    public int getNumberOfVehicles() {
        return numberOfVehicles;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }
}