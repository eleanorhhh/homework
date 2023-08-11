public class Practice_swap{
    public static void main(String[] args) {
        int a[]={1,2,3,4};
        int temp=a[1];
        a[1]=a[2];
        a[2]=temp;
        System.out.println(a[2]);        
        System.out.print(a[1]);
    }
}