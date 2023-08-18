public class Matrix {
    public int row;
    public int col;
    public int[][] numbers;

    // array 初始化 會跟外面的連動 所以要用 copy 不可以直接等於
    public Matrix(int row, int col, int[][] numbers) {
        this.row = row;
        this.col = col;
        this.numbers = new int[numbers.length][numbers[0].length];
        for (int i = 0; i < numbers.length; i++) {
            System.arraycopy(numbers[i], 0, this.numbers[i], 0, numbers[i].length);
        }

    }

    public void print() {
        for (int i = 0; i < row; i++) {
            for (int j = 0; j < col; j++) {
                System.out.printf("%d\t", numbers[i][j]);
            }
            System.out.print("\n");
        }
    }

    public void transpuse() {
        int x = col;
        int y = row;
        int[][] transpuseMatrix = new int[x][y];//創造一個新的矩陣
        for (int i = 0; i < numbers.length; i++) {
            for (int j = 0; j < numbers[0].length; j++) {
                transpuseMatrix[j][i] = numbers[i][j];//新的矩陣儲存numbers顛倒x y 的值
            }

        }
        numbers = transpuseMatrix; //number[i][j]=number[j][i]
        this.row = x;//row必須指向顛倒的x
        this.col = y;
    }
}
