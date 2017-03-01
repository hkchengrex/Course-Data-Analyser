//do NOT submit this file.
//do NOT modify this file.

#include <iostream>
#include <string>
#include "Timeslot.h"

using namespace std;

class Activity
{
public:
    Activity(string name, const Timeslot& timeslot); //constructor
    string getName() const; //return the acitivity's name
	const Timeslot& getTimeslot() const; //return the acitivity's timeslot

    void print() const //print the name and timeslot of the activity; already completed; do not modify
    {
        timeslot.print();
        cout << " " << name << endl;
    }

private:
    string name; //the string that stores the activity's name
    Timeslot timeslot; //the timeslot object which stores the start time and end time for this activity
};
