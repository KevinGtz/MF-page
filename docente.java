
public class docente {
	private String nombre, apellido, tipo;
	private int horas;
	private double descuento;
	private double sueldoneto;
	private int sueldociencias, sueldoletras;

	public docente(String nombre, String apellido, String tipo, int horas){
		this.nombre = nombre;
		this.apellido = apellido;
		this.tipo = tipo;
		this.horas = horas;
	}
	public void setProperties (String nombre, String apellido, String tipo, int horas){
		this.nombre = nombre;
		this.apellido = apellido;
		this.tipo = tipo;
		this.horas = horas;
	}
	public String getProperties(){
		return String.format("Nombre: %s \n Apellido: %s \n Tipo: %s \n Horas: %d", this.nombre, this.apellido);
	}
	public String getFullName(){
		return String.format("Nombre completo: %s %s", this.nombre, this.apellido);
	}
	public int getpay( int s, String subject){
		if (subject.equals("letras")){
		return sueldoletras = s / 5;
	}
	else {
	return sueldociencias = s / 3;}
}
public double getdiscount(int sueldoBruto) {
	descuento = sueldoBruto *.10;
	return descuento;
}
public double gettotal(int sueldoBruto) {
	sueldoneto = sueldoBruto - descuento;
	return sueldoneto; 
}
}








