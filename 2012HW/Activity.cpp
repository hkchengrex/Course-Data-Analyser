//submit this file.
//you must use this exact file name.

#include "Activity.h"

Activity::Activity(string name, const Timeslot& timeslot) : name(name), timeslot(timeslot) {};

string Activity::getName() const {
	return name;
};

const Timeslot& Activity::getTimeslot() const {
	return timeslot;
};

