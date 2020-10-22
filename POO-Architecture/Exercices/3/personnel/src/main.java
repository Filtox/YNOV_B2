public class main {
    public static void main(String[] args) {
        Concession concession = new Concession();

        Car car = new Car(5, "black");
        concession.addVehicle(car);
        car = new Car(3, "red");
        concession.addVehicle(car);
        car = new Car(4, "white");
        concession.addVehicle(car);

        Motorcycle motorcycle = new Motorcycle(900, "blue");
        concession.addVehicle(motorcycle);
        motorcycle = new Motorcycle(850, "green");
        concession.addVehicle(motorcycle);

        Walker<Vehicle> vehicleWalker = concession.getVehicules();
        while (vehicleWalker.hasNext()){
            Vehicle vehicle = vehicleWalker.next();
            System.out.println(vehicle);
        }
    }
}
