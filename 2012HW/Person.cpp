//submit this file.
//you must use this exact file name.

#include "Person.h"

Person::Person(string name) : name(name), activities(NULL), activityCount(0) {};

Person::~Person() {	delete [] activities; };

string Person::getName() const {
	return name;
};

bool Person::addActivity(const Activity& activity) {
	for (int i = 0; i < activityCount; i++) {
		if (activities[i]->getName() == activity.getName() ||
				activities[i]->getTimeslot().hasConflictsWith(activity.getTimeslot()))
			return false;
	}
	if (activities == NULL) {
		activities = new Activity*[1];
		activities[0] = &activity;
	}
	else {

	}
	activityCount += 1;
};


