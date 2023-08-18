import java.util.Arrays;

public class MatrixMultiplied {
    public static void main(String[] arge) {
        // Matrix matA = new Matrix(3, 3, new float[][] { { 1, 2, 3 }, { 4, 5, 6 }, { 7,
        // 8, 9 } });
        // Matrix matB = new Matrix(3, 3, new float[][] { { 1, 2, 3 }, { 4, 5, 6 }, { 7,
        // 8, 9 } });
        // Multiply(matA, matB);
        // add(matA, matB);
        // subtraction(matA, matB);
        // numberMultiply(matA, 2);
        Matrix inverseMat = InverseMatrix(new Matrix(2, 2, new float[][] { { 1, 1 }, { 2, 3 } }));
        Multiply(inverseMat, new Matrix(2, 1, new float[][]{{3},{8}}));
    }

    public static void Multiply(Matrix matA, Matrix matB) {

        float temp[][] = new float[matA.row][matB.col];
        for (int i = 0; i < matA.row; i++)
            for (int k = 0; k < matB.col; k++) {
                for (int j = 0; j < matB.row; j++) {
                    temp[i][k] += matA.numbers[i][j] * matB.numbers[j][k];
                    // System.out.printf("%d %d value:%f * %d %d value:%f = %f at %d %d\n",
                    // i, j, matA.numbers[i][j], j, k, matB.numbers[j][k], temp[i][k], i, k);
                    // System.out.printf("%d %d  * %d %d at %d %d\n",
                    // i, j, j, k, i, k);
                }
            }
        Matrix matC = new Matrix(matA.row, matB.col, temp);
        matC.print();
    }

    public static void add(Matrix matA, Matrix matB) {
        float temp[][] = new float[matA.row][matA.col];
        for (int i = 0; i < matA.row; i++) {
            for (int j = 0; j < matA.col; j++) {
                temp[i][j] = matA.numbers[i][j] + matB.numbers[i][j];
            }

        }
        Matrix matc = new Matrix(matA.row, matA.col, temp);
        matc.print();

    }

    public static void subtraction(Matrix matA, Matrix matB) {
        float temp[][] = new float[matA.row][matA.col];
        for (int i = 0; i < matA.row; i++) {
            for (int j = 0; j < matA.col; j++) {
                temp[i][j] = matA.numbers[i][j] - matB.numbers[i][j];
            }

        }
        Matrix matc = new Matrix(matA.row, matA.col, temp);
        matc.print();
    }

    public static Matrix numberMultiply(Matrix matA, float g) {
        float temp[][] = new float[matA.row][matA.col];
        for (int i = 0; i < matA.row; i++) {
            for (int j = 0; j < matA.col; j++) {
                temp[i][j] = g * matA.numbers[i][j];
            }

        }
        Matrix matc = new Matrix(matA.row, matA.col, temp);
        return matc;
    }

    public static Matrix InverseMatrix(Matrix matA) {
        float temp[][] = new float[matA.row][matA.col];
        float a = matA.numbers[0][0] * matA.numbers[1][1];
        float b = matA.numbers[0][1] * matA.numbers[1][0];

        if (a - b == 0) {
            System.out.println("錯誤");
            return new Matrix(2, 2, temp);

        } else if (matA.row != 2 && matA.col != 2) {
            System.out.println("必須為2乘2矩陣");
            return new Matrix(2, 2, temp);

        } else {
            float c = a - b;
            temp[0][0] = matA.numbers[1][1];
            temp[1][1] = matA.numbers[0][0];
            temp[0][1] = -(matA.numbers[0][1]);
            temp[1][0] = -(matA.numbers[1][0]);
            Matrix matC = new Matrix(2, 2, temp);
            float det = 1 / c;
            return numberMultiply(matC, det);

        }

    }

}
