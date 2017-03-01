//do NOT submit this file.
//do NOT modify this file.

#include "Person.h"

class TimeManager
{
public:
    TimeManager(); //constructor; hint: remember to initialize personCount to 0 and persons to NULL
    ~TimeManager(); //destructor; hint: remember to deallocate any dynamically-allocated memory

    /*
	 * add a person and return true if the person can be added successfully
	 * do nothing and return false otherwise - that means the person name already exists (i.e. same as one of the existing persons')
	 */
    bool addPerson(string name);

    /*
	 * add an activity for the specified person and return true if it can be done successfully
	 * do nothing and return false otherwise - that means either
	 * (1) the person cannot be found by the given name
	 * (2) calling the function addActivity on the found person object returns false (which signals that it cannot be done for some reason)
	 */
    bool addActivityForPerson(string personName, const Activity& activity);

    /*
	 * remove the specified person and return true if it can be done successfully
	 * do nothing and return false if it cannot be done - which means the person cannot be found by the given name
	 */
    bool removePerson(string name);

    /*
	 * remove the specified activity for the specified person and return true if it can be done successfully
	 * do nothing and return false if it cannot be done - that means either
	 * (1) the person cannot be found by the given name
	 * (2) calling the function removeActivity on the found person object returns false (which signals that it cannot be done for some reason)
	 */
    bool removeActivityForPerson(string personName, string activityName);

    /*
     * return true if a person with the given name exists already
     * return false otherwise
     */
    bool doesPersonExist(string name) const;

    /*
     * find the first (i.e. earliest) common timeslot for all persons
     * read the webpage description for detailed specification and examples
     * a new timeslot object should be created and returned to represent the result
     * simply return NULL if no common timeslot is found
     * you can assume there is at least one person added when this function is called
     */
    Timeslot* findFirstCommonTimeslot() const;

    /*
     * find all the common timeslots for all persons
     * read the webpage description for detailed specification and examples
     * a dynamic timeslot array, which stores all the common timeslots, should be created and returned via "results" which is a passed-by-reference parameter
     * similarly, the number of elements in the said array should also be returned via "timeslotCount" which is also a passed-by-reference parameter
     * "results" should be set to NULL and "timeslotCount" should be set to 0 if no common timeslot is found
     * you can assume there is at least one person added when this function is called
     */
    void findAllCommonTimeslots(Timeslot**& results, int& timeslotCount) const;

    void print() const //print the schedule of all persons one by one; already completed; do not modify
    {
    	if(personCount == 0) cout << "There is nothing in the database yet." << endl;
    	else
    	{
    		cout << "Listing schedule of all " << personCount << " "<< (personCount>1?"persons":"person") << "..." << endl;
    		for(int i=0; i<personCount; i++)
    		{
    			persons[i]->printActivities();
    		}
    	}
    }

private:
    Person** persons; //the dynamic array, which is just big enough, that stores all the persons in the system; it should be NULL at the beginning
    int personCount; //the number of persons; it should be 0 at the beginning
};
