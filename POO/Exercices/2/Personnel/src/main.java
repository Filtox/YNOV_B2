import com.ynov.domain.Concession;
import com.ynov.model.Car.Car;
import com.ynov.model.Motorcycle.Motorcycle;

public class main {
    /*
    public static void main(String[] args) {
        Car car = new Car();
        System.out.println(car);

        Motorcycle motorBike = new Motorcycle();
        System.out.println(motorBike);

        Concession concession = new Concession();
        System.out.println(concession);
    }
    */

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

        Vehicle[] vehicles = concession.getVehicules();
        for (int i = 0; i < concession.getNumberOfVehicles(); i++) {
            System.out.println(concession.getVehicules()[i]);
        }
    }
}