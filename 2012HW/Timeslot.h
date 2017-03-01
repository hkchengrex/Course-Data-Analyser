//do NOT submit this file.
//do NOT modify this file.

#include <iostream>
using namespace std;

class Timeslot
{
public:
    Timeslot(int startTime, int endTime); //constructor

    //return true if there is a time conflict with another timeslot
    //return false otherwise
    //e.g. [03:00-05:00] conflicts with [04:00-06:00] and [02:00-06:00], but not [05:00-06:00]
    bool hasConflictsWith(const Timeslot& another) const;

    int getStartTime() const; //return the start time
    int getEndTime() const; //return the end time

    void printHour(int hour) const //a helper function to format and print the hour; already completed; do not modify
    {
        cout << (hour<=9?"0":"") << hour << ":00";
    }
    void print() const //print the timeslot information; already completed; do not modify
    {
    	cout << "[";
        printHour(startTime);
        cout << "-";
        printHour(endTime);
        cout << "]";
    }
private:
    int startTime; //the start time (inclusive), can be 0, 1, ..., 23
    int endTime; //the end time (exclusive), can be 1, 2, ..., 24, where 24 denotes the end of the day (which is basically the hour 0 of the next day)
    //see webpage description for details and examples
};
