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
		const Activity** temp = new const Activity*[activityCount+1];
		for (int i = 0; i < activityCount+1; i++) {
			if (activities[i]->getTimeslot().getStartTime() < activity.getTimeslot().getStartTime()) {
				temp[i] = activities[i];
				if (i == activityCount-1) {
					temp[i+1] = &activity;
					break;
				}
			}
			else {
				temp[i] = &activity;
				for (int j = i+1; j < activityCount+1; j++)
					temp[j] = activities[j-1];
				break;
			}
		}
		delete [] activities;
		activities = temp;
	}
	activityCount += 1;
	return true;
};


