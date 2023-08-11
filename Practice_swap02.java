
public class Practice_swap02 {
    public static void main(String[] args) {
        int a[] = { 1, 2, 3, 4 };
        swapDoNotCopy(a, 1, 2);
        System.out.println(a[1]);
        System.out.print(a[2]);
        
    }

    public static void swap(int[] arr,int c, int b) {
        int temp=arr[c];     
        arr[c]=arr[b];
        arr[b]=temp;
    }//直接改變到物件

    public static void swapDoNotCopy(int[] arr,int c, int b) {
        // int[] copyArr = arr; // 會讓 copyArr 指向 arr
        int[] copyArr = new int[arr.length];
        System.arraycopy(arr, 0, copyArr, 0, arr.length - 1);
        int temp=copyArr[c];     
        copyArr[c]=copyArr[b];
        copyArr[b]=temp;
    }//不直接改變到原本物件
}