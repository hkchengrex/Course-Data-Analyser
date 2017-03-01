//do NOT submit this file.
//do NOT modify this file.

#include <iostream>
#include <string>
#include "TimeManager.h"

using namespace std;

//a helper function to help with getting an integer input with validation
int getIntegerInput(string question, int lowerBound, int upperBound)
{
    int input = lowerBound - 1;
    while(input<lowerBound || input>upperBound)
    {
        cout << question << " [" << lowerBound << "-" << upperBound << "]? ";
        cin >> input;
    }
    return input;
}

//a helper function to help with getting an string input
string getStringInput(string question)
{
	string input;
	cout << question << " ";
	cin >> input;
	return input;
}

//main is the entry point of the program
int main()
{
    TimeManager timeManager;

    cout << "Thanks for using the Time Management System!" << endl << endl;

    while(true)
    {
        cout << "1. Show the database" << endl;
        cout << "2. Add a person" << endl;
        cout << "3. Add an activity for a person" << endl;
        cout << "4. Remove a person" << endl;
        cout << "5. Remove an activity for a person" << endl;
        cout << "6. Find the earliest common free timeslot" << endl;
        cout << "7. Find all common free timeslots" << endl;
        cout << "0. Quit" << endl;

        int option = getIntegerInput("What would you like to do", 0, 7);
    	cout << endl;

        switch(option)
        {
        	case 0:
        	{
        	    cout << "Bye!" << endl;
        		return 0; //quit
        	}
            case 1:
            {
                timeManager.print();
                break;
            }
            case 2:
            {
            	cout << "Let's add a person." << endl;
            	string personName = getStringInput("What is the person's name?");
                if(timeManager.addPerson(personName)) cout << personName << " has been added." << endl;
                else cout << personName << " cannot be added due to a person name conflict." << endl;
                break;
            }
            case 3:
            {
            	cout << "Let's add an activity for a person." << endl;
            	string personName = getStringInput("What is the person's name?");
                if(!timeManager.doesPersonExist(personName))
                {
                    cout << "There is no such person!" << endl;
                    break;
                }
            	string activityName = getStringInput("What is the activity's name?");
            	int activityStartTime = getIntegerInput("When does the activity start", 0, 23);
            	int activityEndTime = getIntegerInput("When does the activity end", activityStartTime + 1, 24);
                if(timeManager.addActivityForPerson(personName, Activity(activityName, Timeslot(activityStartTime, activityEndTime)))) cout << activityName << " has been added." << endl;
                else cout << activityName << " cannot be added due to an activity name/time conflict." << endl;
                break;
            }
            case 4:
            {
            	cout << "Let's remove a person." << endl;
            	string personName = getStringInput("What is the person's name?");
                if(timeManager.removePerson(personName)) cout << personName << " has been removed." << endl;
                else cout << "Person name does not exist in the database." << endl;
                break;
            }
            case 5:
            {
            	cout << "Let's remove an activity for a person." << endl;
            	string personName = getStringInput("What is the person's name?");
                if(!timeManager.doesPersonExist(personName))
                {
                    cout << "There is no such person!" << endl;
                    break;
                }
            	string activityName = getStringInput("What is the activity's name?");
                if(timeManager.removeActivityForPerson(personName, activityName)) cout << activityName << " has been removed." << endl;
                else cout << activityName << " cannot be removed - activity not found." << endl;
                break;
            }
            case 6:
            {
            	cout << "Let's find the earliest free timeslot." << endl;
            	Timeslot* timeslot = timeManager.findFirstCommonTimeslot();
            	if(timeslot == NULL) cout << "No common timeslot is found." << endl;
            	else
            	{
            		cout << "The first common timeslot is ";
            		timeslot->print();
            		cout << endl;
            	}
            	delete timeslot;
            	break;
            }
            case 7:
            {
            	cout << "Let's find all common free timeslots." << endl;
            	Timeslot** timeslots = NULL;
            	int timeslotCount = 0;
            	timeManager.findAllCommonTimeslots(timeslots, timeslotCount);
            	if(timeslotCount == 0) cout << "No common timeslot is found." << endl;
            	else
            	{
            		cout << "The common timeslots are:" << endl;
                	for(int i=0; i<timeslotCount; i++)
                	{
                		timeslots[i]->print();
                		cout << endl;
                	}
            	}
            	for(int i=0; i<timeslotCount; i++)
            		delete timeslots[i];
            	delete [] timeslots;
            	break;
            }
        }

        cout << endl;
    }
    return 0;
}
