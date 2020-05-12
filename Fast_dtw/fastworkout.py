import numpy as np
import csv
import os
import statistics
import pymysql
import pymysql.cursors
from fastdtw import fastdtw
from scipy.spatial.distance import euclidean
from scipy.spatial import distance


# Connect to the database
connection = pymysql.connect(host='localhost',user='root',password='',db='workout',charset='utf8mb4',cursorclass=pymysql.cursors.DictCursor)

workout_training1 =[]

result1 = ""

shortest_distance1 =""

workout_testing1 =[]

workoutlist1 = []
workoutlist2 = []

workoutlisttrain1 = []
workoutlisttrain2 = []


counteradat=0


filename = "TestingFile.csv"

rows = []
rows1 = []


with open(filename, 'r') as csvfile:

    csvreader = csv.reader(csvfile)




    for row in csvreader:
        rows1.append(row)

flag=False
flagU=False
Range=0
counter=0

IsBadData = True
rows2 =[]
for i in range (len(rows1)):
    if i > 1:
        if float(rows1 [i][2])<0.1 and IsBadData ==True:

            continue

        else:
            IsBadData = False
            rows2.append(rows1[i])



for row in rows2[15: rows2.__len__() - 20]:

    a = [float(rows2[0][0]), float(rows2[0][1]), float(rows2[0][2])] #8
    b = [float(rows2[counter + 9][0]), float(rows2[counter + 9][1]), float(rows2[counter + 9][2])] #14
    # print(counter)
    diffranceEculidian = distance.euclidean(  a,b  ) #9,10
    counter += 1
    if (not flag):

        Range = diffranceEculidian
        flag = True

    if (Range < diffranceEculidian):



        flagU = True


        for col in row:
            workoutlist2.append(float(col))
        workout_testing1.append((workoutlist2))
        workoutlist2=[]
        # print(workout_testing1.__len__())
    elif (Range > diffranceEculidian and flagU == True and (workout_testing1.__len__())>10):

        flagU = False
        counteradat+=1
        workout_trainingNP1=[]

        listq2 = []
        q2 = int((workout_testing1.__len__() / 5))
        for y in range(0, workout_testing1.__len__() - 1, q2):
            listq2.append(workout_testing1[y])



        for i in range(188) :

            workout_training1 = []

            workoutlisttrain1 = []

            flag2=False
            flagU2=False
            flagD2=False
            Range2=0
            pathh = ""
            counter2=0

            rows = []
            if i < 92:
                pathh = "Right_movement/Right_range (" + str(i + 1) + ").csv"
            else:
                pathh = "Wrong_movement/Wrong_range_put_your_shoulder_and_elbow_in_ninety_degree (" + str((i - 92) + 1) + ").csv"

            with open(pathh, 'r') as csvfile:


                csvreader2 = csv.reader(csvfile)


                for row in csvreader2:
                    rows.append(row)
# rows1 or rows
            IsBadData2 = True
            rows3 = []
            for i in range(len(rows)):
                if i > 1:
                    # print(i)
                    if float(rows[i][2]) < 0.1 and IsBadData2 == True:

                        continue

                    else:
                        IsBadData2 = False
                        rows3.append(rows[i])

            for row in rows3[15:rows3.__len__()-20]:

                a = [float(rows2[0][0]), float(rows2[0][1]), float(rows2[0][2])]
                # print(counter2)
                b = [float(rows3[counter2 + 9][0]), float(rows3[counter2 + 9][1]), float(rows3[counter2 + 9][2])]
                diffranceEculidian = distance.euclidean(a, b)  # 9,10
                counter2 += 1
                if (not flag2):
                    Range2 = diffranceEculidian
                    flag2 = True

                if (Range2 < diffranceEculidian):
                    flagU2 = True
                    # flagD2 =False

                    for col in row:
                        workoutlisttrain1.append(float((col)))
                    workout_training1.append(workoutlisttrain1)
                    workoutlisttrain1=[]
                    # print(workout_training1)

                elif (Range2 > diffranceEculidian and flagU2 == True and (workout_training1.__len__())>10):

                    flagU2 = False
                    # FlagD = True
                    q1 = int((workout_training1.__len__()/5))

                    listq1 =[]
                    # print(len(workout_training1))

                    for x in range(0,workout_training1.__len__()-1,q1):
                        listq1.append(workout_training1[x])



                    workout_trainingNP1 = np.array(listq1)
                    workout_testingNP1 = np.array( listq2)
                    # print(listq1.__len__())
                    # print(listq2.__len__())
                    # print(workout_trainingNP1)
                    # print(workout_testingNP1)

                    distance1, path = fastdtw(listq1, listq2, dist=euclidean)
                    workout_training1 =[]
                    workoutlisttrain1 =[]
                    # print(distance1)
                    # print(pathh)


                #
                # if( (flagU == False) and (flagD == True)):
                #     flagD = False
                    if (result1 == "" ):
                        result1 = distance1
                        shortest_distance1 = pathh
                    elif (result1 > distance1):
                        result1 = distance1
                        shortest_distance1 = pathh
        if counteradat > 1:
            break
        workoutlist2 = []
        workout_training1 = []
        adat ="\nThe " + str(counteradat) + " Movement is :"
        print(adat)
        print(shortest_distance1)
        # print(result1)


















if(result1==""):
    shortest_distance1='did not read'
    print("please record again")




if(shortest_distance1[0]=='R'):
    shortest_distance = 1

if(shortest_distance1[0]=='W'):
    shortest_distance = 2

try:
    with connection.cursor() as cursor:
        # Create a new record

        movementID = "SELECT id FROM `usermovement` ORDER BY id DESC LIMIT 1 "
        cursor.execute(movementID)
        res = cursor.fetchone()
        print('ID:' + str(res))
        sql = "INSERT INTO `movementresult` (`usermovementID`, `resultID`) VALUES (%s, %s)"

        cursor.execute(sql, (res['id'], shortest_distance))

    # connection is not autocommit by default. So you must commit to save
    # your changes.
    connection.commit()

finally:
    connection.close()




os.system('PAUSE')




















