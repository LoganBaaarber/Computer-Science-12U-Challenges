  __   _   ___   _      _    _   ___ 
 /__  |_)   |   | \    |_)  / \   |  
 \_|  | \  _|_  |_/    |_)  \_/   |  
                                     

DESCRIPTION
*******************************************************************************
Write an AI that allows a virtual robot living on a grid to collect power cells.
You must determine the shortest path to collect the power cells in order and
issue the commands to the robot.


INPUT DESCRIPTION
*******************************************************************************
The input file "input.txt" contains maps of the grid in various states. See 
below for the meaning of each of the symbols. The first line of the input file 
specifies the size (length and width) of the grids.

GRID LEGEND
------------------------------------------
. = A grid cell.
B = Grid Bot's starting location.
0 = The location of the first power cell.
1 = The location of the second power cell.
2 = The location of the third power cell.
------------------------------------------


OUTPUT SPECIFICATION
*******************************************************************************
Output the commands Grid Bot must follow to complete each map.  Each line of 
the output file contains the instructions Grid Bot must follow to solve each
map.  Your output file "output.txt" must exactly match "sample-output.txt".
The characters N, S, E, and W denote compass directions. The numbers 0, 1, and 2 
denote power cell pickups.


PERMITTED .NET CLASSES
*******************************************************************************
System.IO.StreamReader
System.IO.StreamWriter