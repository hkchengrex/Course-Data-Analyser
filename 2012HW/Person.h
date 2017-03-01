//do NOT submit this file.
//do NOT modify this file.

#include <iostream>
#include <string>
#include "Activity.h"

using namespace std;

class Person
{
public:
    Person(string name); //constructor; hint: remember to initialize activityCount to 0 and activities to NULL
    ~Person(); //destructor;  hint: remember to deallocate any dynamically-allocated memory
    string getName() const; //return the person's name

    /*
     * add an activity
     * return true if the activity can be added successfully
     * do nothing and return false otherwise - that means either:
     * (1) the activity name already exists (i.e. same as one of the existing activities') for this person
     * (2) there is some time conflict between the new activity and one of the existing activities for this person
     * note: it is required that you make sure the activities are always stored in a sorted order (by time, as you can observe in the printed activities in the examples)
     * therefore, as you insert a new activity, find a proper location in the array to do so, so that the activities are always sorted by time
     */
    bool addActivity(const Activity& activity);

    /*
     * remove the specified activity and return true if it can be done successfully
     * do nothing and return false if it cannot be done - which means the activity cannot be found by the given name
     */
    bool removeActivity(string activityName);

    /*
     *  return true if the person is free at the hour specified
     *  return false otherwise
     *
     *  For example, if the person currently has only two activities:
     *  [02:00-04:00] Activity One
     *  [05:00-06:00] Activity Two
     *
     *  then,
     *  isFreeAtHour(0) should return true;
     *  isFreeAtHour(1) should return true;
     *  isFreeAtHour(2) should return false;
     *  isFreeAtHour(3) should return false;
     *  isFreeAtHour(4) should return true;
     *  isFreeAtHour(5) should return false;
     */
    bool isFreeAtHour(int hour) const;

    void printActivities() const  //print all the activities for this person; already completed; do not modify
    {
        cout << name  << "'s schedule:" << endl;
        if(activityCount == 0)
        	cout << "None." << endl;
        else
        {
			for(int i=0; i<activityCount; i++)
			{
				activities[i]->print();
			}
        }
    }

private:
    string name; //the string that stores the person's name
    Activity** activities; //the dynamic array, which is just big enough, that stores all the activities for this person; it should be NULL at the beginning
    int activityCount; //the number of activities this person has; it should be 0 at the beginning
};
