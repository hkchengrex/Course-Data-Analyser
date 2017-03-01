//submit this file.
//you must use this exact file name.

#include "Timeslot.h"

Timeslot::Timeslot(int startTime, int endTime) : startTime(startTime), endTime(endTime) {};

bool Timeslot::hasConflictsWith(const Timeslot& another) const {
	if ((another.startTime > startTime && another.startTime < endTime) ||
			(another.endTime > startTime && another.endTime < endTime))
		return true;
	else return false;
};

int Timeslot::getStartTime() const {
	return startTime;
};

int Timeslot::getEndTime() const {
	return endTime;
};
