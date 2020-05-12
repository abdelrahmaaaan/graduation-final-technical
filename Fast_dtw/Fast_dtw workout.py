import numpy as np
import csv
import os
import statistics
from docutils.utils.math.math2html import file
from fastdtw import fastdtw
from scipy.spatial.distance import euclidean
from scipy.spatial import distance
import websocket
try:
    import thread
except ImportError:
    import _thread as thread
import time
import json
import pandas as pd
import pymysql
import pymysql.cursors



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
countertest=""
IsBadData = True
rows2 =[]
max1 =0
for i in range (len(rows1)):

    if i > 1:
        if (float(rows1 [i][1])<0.01) and IsBadData ==True  :
            # print(i)
            # print(float(rows1 [i][1]))
            continue

        else:
            IsBadData = False
            # if max1 < rows1[i][1]:
            #     max1=i
            rows2.append(rows1[i])

# print(rows2[0][1])

cut=0
Acounter=0
distancePlus=0
distanceMinus=0
# if (-2>-5):
#     print("eror")


right=0
wrong=0
array=[]
for row in rows2[0: rows2.__len__() - 1]:

    a = [float(rows2[0][1])] #8
    # print(a)
    b = [float(rows2[counter + 1][1]) ] #14
    # print(b)
    # print(counter)
    diffranceEculidian = b #9,10
    counter += 1
    if (not flag):

        # c =[float(rows2[0][0]), float(rows2[0][1]), float(rows2[0][2])]
        # TRange = distance.euclidean(  a,b  )
        distancePlus = a
        # print(Range)
        flag = True

    if (distancePlus < diffranceEculidian):
        distancePlus=diffranceEculidian
        if(not flagU):
            cut+=1

        # print(diffranceEculidian)
        flagU = True


        for col in row:
            workoutlist2.append(float(col))
        workout_testing1.append((workoutlist2))
        workoutlist2=[]

    elif(distancePlus>diffranceEculidian):
        distancePlus=diffranceEculidian
        if(flagU):
            cut+=1
            flagU=False

        for col in row:
            workoutlist2.append(float(col))
        workout_testing1.append((workoutlist2))
        workoutlist2 = []

        # print(workout_testing1.__len__())
    if (cut !=0 and cut %3 == 0 ):
        cut+=1

        flagU = False
        counteradat+=1
        workout_trainingNP1=[]
        # print(workout_testing1)

        listq2 = []
        # q2 = int((workout_testing1.__len__() / 3))
        # for y in range(0, workout_testing1.__len__() - 1, q2):
        #     listq2.append(workout_testing1[y])
        for y in range(0, workout_testing1.__len__() - 1):
            listq2.append(statistics.mean(workout_testing1[y]))
            # file = open("test.txt" + str(y), "w")
            # file.write(str(workout_testing1[y]))
            # file.close()

        workout_testing1 = []



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
                    # print(i)2
                    if (float(rows[i][1]) < 0.01) and IsBadData2 == True :
                        # print(i)


                        continue

                    else:
                        IsBadData2 = False
                        # print(rows[i][1])
                        rows3.append(rows[i])

            cut2=0

            for row in rows3[0:rows3.__len__()-1]: #-4

                a2 = float(rows3[0][1])
                # print(counter2)
                b2 = float(rows3[counter2 + 1][1])
                diffranceEculidian2 = b2  # 9,10
                counter2 += 1
                if (not flag2):
                    Range2 = diffranceEculidian2
                    flag2 = True

                if (Range2 < diffranceEculidian2):
                    Range2=diffranceEculidian2
                    if(not flagU2):
                        cut2+=1
                    flagU2 = True
                    # flagD2 =False

                    for col in row:
                        workoutlisttrain1.append(float((col)))
                    workout_training1.append(workoutlisttrain1)
                    workoutlisttrain1=[]
                    # print(workout_training1)

                elif(Range2>diffranceEculidian2):
                    if (flagU2):
                        cut2 += 1
                        flagU2 = False
                    for col in row:
                        workoutlisttrain1.append(float((col)))
                    workout_training1.append(workoutlisttrain1)
                    workoutlisttrain1=[]

                if (cut2 !=0 and cut2%3==0 ):
                    cut2+=1

                    flagU2 = False
                    # FlagD = True
                    q1 = int((workout_training1.__len__()/3))

                    listq1 =[]
                    # print(len(workout_training1))
                    #
                    # for x in range(0,workout_training1.__len__()-1,q1):
                    #     listq1.append(workout_training1[x])

                    for x in range(0,workout_training1.__len__()-1):
                        listq1.append(statistics.mean(workout_training1[x]))



                    workout_trainingNP1 = np.array(listq1)
                    workout_testingNP1 = np.array( listq2)
                    # print(listq1.__len__())
                    # print(listq2.__len__())
                    # print(workout_trainingNP1)
                    # print(workout_testingNP1)

                    distance1, path = fastdtw(workout_testingNP1, workout_trainingNP1, dist=euclidean)
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
        if counteradat > 6:
            break
        workoutlist2 = []
        workout_training1 = []
        adat ="\nThe " + str(counteradat) + " Movement is :"
        print(adat)
        print(shortest_distance1)
        # print(result1)

        if (shortest_distance1[0] == 'W'):
            wrong = wrong + 1
            array.append('Wrong')
        else:
            right = right + 1
            array.append('Right')

        # print(result1)
strDB=''




strDB=' '.join(map(str,array))


print(strDB)



















if(result1==""):
    print("please record again")



#os.remove("TestingFile.csv")
print(str(right)+" right Movements")
print(str(wrong)+" wrong Movements")
dev1=right+wrong

right1=right/dev1
wrong1=wrong/dev1


if (right>wrong):
    percentage=right1*100
    shortest_distance=1
else:
    percentage=wrong1*100
    shortest_distance=2
try:
    with connection.cursor() as cursor:
        # Create a new record

        movementID = "SELECT id FROM `usermovement` ORDER BY id DESC LIMIT 1 "
        cursor.execute(movementID)
        res = cursor.fetchone()
        print('ID:' + str(res)+str(percentage))
        sql = "INSERT INTO `movementresult` (`usermovementID`, `resultID`,`ResultPercentage`,`repInfo`,`repNo`,`rightNo`,`wrongNo`) VALUES (%s,%s,%s,%s, %s, %s, %s)"

        cursor.execute(sql, (res['id'], shortest_distance,percentage,strDB,dev1,right,wrong))

    # connection is not autocommit by default. So you must commit to save
    # your changes.
    connection.commit()

finally:
    connection.close()






os.system('PAUSE')




















