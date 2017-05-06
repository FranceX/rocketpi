#!/bin/bash

echo Servo Motor Controller
echo Powered by: ServoBlaster

echo Starting ServoBlaster
/home/pi/PiBits/ServoBlaster/user/servod
if [ $? -eq 0 ]; then
    echo ServoBlaster Correctly Started
else
    echo FAIL - Try to run with ROOT Permission
    exit 1
fi

echo
echo Launching...

echo 0=0% > /dev/servoblaster
if [ $? -eq 0 ]; then
    echo Launched!
    echo
else
    echo FAIL - Try to run with ROOT Permission
    exit 1
fi

sleep 2

echo 0=100% > /dev/servoblaster
if [ $? -eq 0 ]; then
    echo Start Position Reached
else
    echo FAIL - Try to run with ROOT Permission
    exit 1
fi

killall servod
if [ $? -eq 0 ]; then
    echo Servo Motor Correctly Stopped
else
    echo FAILED - Unable to exit servod process
    exit 1
fi
