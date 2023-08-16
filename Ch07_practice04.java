import java.util.Random;

public class Ch07_practice04 {
    public static void printArray(boolean[][] arr) {
        for (int i = 0; i < 5; i++) {
            for (int j = 0; j < 5; j++) {
                System.out.print(arr[i][j] + " ,");
            }
            System.out.print("\n");
        }

    }

    public static void initArr(boolean[][] arr) {
        for (int i = 0; i < 5; i++) {
            for (int j = 0; j < 5; j++) {
                arr[i][j] = true;
            }
        }
    }

    public static void setUnParkable(boolean[][] arr, int index) {
        int x = index / 5;
        int y = index % 5;
        arr[x][y] = false;
    }

    public static void countRemainParking(boolean[][] arr)
    {
        int count=0;
        for(int i=0;i<5;i++){
            for(int j=0;j<5;j++){
                if (arr[i][j]){
                    count++;
                }
            }
        }
        System.out.println("剩餘"+count+"個停車位");
    }

    public static void main(String[] args) {
        Random rand = new Random();
        int n = rand.nextInt(25);
        System.out.println(n);
        boolean[][] park = new boolean[5][5];
        initArr(park);
        printArray(park);
        setUnParkable(park, n);
        printArray(park);
        countRemainParking(park);
    }
}
