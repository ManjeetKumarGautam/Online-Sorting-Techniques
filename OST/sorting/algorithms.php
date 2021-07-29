<?php
function Sorting()
{
    function bubble_sort()
    {
        echo "
1.  Initialisation 
        Set i = 0
2.  For Loop until i < N 
3.  Set j = 0
4.  For Loop until j < (N-1)-1
5.  If A[j] > A[j+1] then 
        Set temp = A[j] 
        Set A[j] = A[j+1]
        Set A[j+1] = temp  
6.  End If 
7.  Exit";
    }

    function quick_sort()
    {
        echo "
1:  [Initially] 
        low = l
        high = h        
        key = a[(l+ h)/2] [Middle element of the element of the list]       
        2:  Repeat through step 7 while (low<=high)        
3:  Repeat step 4 while (a([low]<key))        
4:  low=low+1        
5:  Repeat step 6 while (a([high]<key))       
6:  high = high -1        
7:  if(low<=high)        
        temp =a[low]        
        a[low]=a[high]        
        a[high]=temp       
        low-low+1        
        high-high-1        
8:  if (l<high) Quick_sort (a, l, high)
9:  if (low<h) Quick_sort (a, low, h)
10: Exit";
    }

    function merge_sort()
    {
        echo "
1:  [INITIALIZE] SET I = BEG, J = MID + 1, INDEX = 0
2:  Repeat while (I <= MID) AND (J<=END)
            IF ARR[I] < ARR[J]
                SET TEMP[INDEX] = ARR[I]
                SET I = I + 1
            ELSE
                SET TEMP[INDEX] = ARR[J]
                SET J = J + 1
            [END OF IF]
            SET INDEX = INDEX + 1
        [END OF LOOP]
3:  [Copy the remaining elements of right sub-array, if any]
        IF I > MID
            Repeat while J <= END
                SET TEMP[INDEX] = ARR[J]
                SET INDEX = INDEX + 1, SET J = J + 1
            [END OF LOOP]
        [Copy the remaining elements of left sub-array, if any]
        ELSE
            Repeat while I <= MID
                SET TEMP[INDEX] = ARR[I]
                SET INDEX = INDEX + 1, SET I = I + 1
            [END OF LOOP]
        [END OF IF]
4:  [Copy the contents of TEMP back to ARR] SET K = 0
5:  Repeat while K < INDEX
            SET ARR[K] = TEMP[K]
            SET K = K + 1
        [END OF LOOP]
6:  Exit";
    }
    function insertion_sort()
    {
        echo "
1:  Set k = 1.
2:  For k = 1 to (n-1)
        Set temp = a[ k]
        Set j = k - 1
        While temp < a[j] and (i >= 0) perform the following steps.
            Set a[j+1] = a[j]
        [End of loop structure]
        Assign the value of temp to a[j+1]
    [End of for loop structure]
3:  Exit..
        ";
    }
    function selection_sort()
    {
        echo "
1:  [INITIALIZE] min = a[0]
2:  For i = 0 to (n-1)
        Set min = a[i]
        Set loc = i
        For j=i+1 to (n-1)
            If a[j]<min
                Set min = a[j]
                Set loc = j
            [End of If]
        [End of For Loop Structure]
        If loc!=i
            Set temp = a[i]
            Set a[i] = a[loc]
            Set a[loc] = temp
        [End of If]
    [End of For loop Structure]
3:  Exit";
    }
}
