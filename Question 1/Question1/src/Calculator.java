import java.util.Scanner;

public class Calculator {
	
	public static void sum(String number){
		String others = "\\D";
		String[] mstr = number.split(others);
		int result = 0; // to get the sum of the numbers
		for (String string : mstr){
			if (string.matches("\\d+")){
				result += Integer.valueOf(string);
			}
		}
		System.out.println(result);
	}
	
	public static void main(String[] args){
		Scanner sc = new Scanner(System.in);
		String number;
		number = sc.nextLine();
		sum(number);
	}
}
