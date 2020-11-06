package com.ynov.controller;

import com.ynov.model.Car;
import com.ynov.model.Concession;
import com.ynov.model.Motorcycle;
import com.ynov.model.Vehicle;

import java.io.*;
import java.util.Iterator;

public class Main {
        private static Concession concession = new Concession();

        public static void main(String[] args) throws IOException, InterruptedException {
            BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
            while (true) {
                System.out.println("1- Load concession");
                System.out.println("2- create vehicle");
                System.out.println("3- List vehicles");
                System.out.println("4- Save concession");
                System.out.println("5- Exit");
                System.out.print("> ");
                String input = br.readLine();
                System.out.println(input);


                if (input.length() == 1 && input.toLowerCase().equals("1")) {
                    System.out.println("Load.");
                    load();
                }
                if (input.length() == 1 && input.toLowerCase().equals("2")) {
                    System.out.println("Create.");
                    Motorcycle e = new Motorcycle();
                    e.setColor("pink");
                    concession.addVehicle(e);
                    concession.addVehicle(new Car());
                }
                if (input.length() == 1 && input.toLowerCase().equals("3")) {
                    System.out.println("List.");
                    Iterator<Vehicle> vehicleWalker = concession.getVehicules();
                    while (vehicleWalker.hasNext()){
                        Vehicle vehicle = vehicleWalker.next();
                        System.out.println(vehicle);
                    }

                }
                if (input.length() == 1 && input.toLowerCase().equals("4")) {
                    System.out.println("Save.");
                    save();
                }
                if (input.length() == 1 && input.toLowerCase().equals("5")) {
                    System.out.println("Exiting.");
                    return;
                }

            }
        }

        private static void load() {
            ObjectInputStream ois = null;
            try {
                ois = new ObjectInputStream(new BufferedInputStream(new FileInputStream("t.tmp")));
                concession = (Concession)ois.readObject();
            }   catch (IOException | ClassNotFoundException e) {
                e.printStackTrace();
            }   finally {
                try {
                    ois.close();
                }   catch (IOException e) {
                    e.printStackTrace();
                }
            }
        }

        private static void save() {
            ObjectOutputStream oos = null;
            try {
                oos = new ObjectOutputStream(new BufferedOutputStream(new FileOutputStream("t.tmp")));
                oos.writeObject(concession);
            }   catch (IOException e) {
                e.printStackTrace();
            }   finally {
                try {
                    oos.close();
                }   catch (IOException e) {
                    e.printStackTrace();
                }
            }
        }
}
