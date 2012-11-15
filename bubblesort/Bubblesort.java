class Bubblesort {

    public static void main(String[] args)
    {
        int numints = 5000;
        int[] ints = new int[numints];
        long start, end;

        for (int i = 0; i < numints; i++) {
            ints[i] = (int)(Math.random() * 100000 + 1);
        }
        System.out.println("Sorting " + numints + " integers");
        start = System.currentTimeMillis();
        Bubblesort.bubblesort(ints, numints);
        end = System.currentTimeMillis();
        System.out.printf("Sort took %.4f secs\n", ((double)(end - start) / 1000));
    }

    public static void bubblesort(int[] ints, int numints)
    {
        int tmp;

        for (int i = numints; i-- >= 0; ) {
            for (int j = 0; j < i; j++) {
                if (ints[j] > ints[j+1]) {
                    tmp = ints[j];
                    ints[j] = ints[j+1];
                    ints[j+1] = tmp;
                }
            }
        }
    }
}
