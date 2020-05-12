// (c) Copyright Microsoft Corporation.
// This source is subject to the Microsoft Public License (Ms-PL).
// Please see http://go.microsoft.com/fwlink/?LinkID=131993 for details.
// All other rights reserved.

using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Navigation;
using System.Windows.Shapes;
using Microsoft.Kinect;
using Coding4Fun.Kinect.Wpf;
using System.IO;
using System.Diagnostics;

namespace SkeletalTracking
{
    /// <summary>
    /// Interaction logic for MainWindow.xaml
    /// </summary>
    public partial class MainWindow : Window
    {
        //public static const float alpha = 0.05f;
        int counter = 0;
        public static float[] array = new float[24];
        public static float[] output = new float[24];


        public MainWindow()
        {
            File.Delete("C:\\Users\\4S\\PycharmProjects\\Fast_dtw\\TestingFile.csv");

            var csv = new StringBuilder();

            var newLine = string.Format("{0}, {1}, {2}, {3}, {4}, {5}, {6}, {7}, {8}, {9}, {10}, {11}, {12}, {13}, {14}, {15}, {16}, {17}, {18}, {19}, {20}, {21}, {22}, {23}", "xlefthand", "ylefthand", "zlefthand", "xRightHand", "yRightHand", "zRightHand", "xLeftElbow", "yLeftElbow", "zLeftElbow", "xRightElbow", "yRightElbow", "zRightElbow", "xLeftshoulder", "yLeftshoulder", "zLeftshoulder", "xRightshoulder", "yRightshoulder", "zRightshoulder", "xSpine", "ySpine", "zSpine", "xHipcenter", "yHipcenter", "zHipcenter");
            //  var newLine = string.Format("{0},{1}", "hello", "world");
            csv.AppendLine(newLine);

            //after your loop
            File.AppendAllText("C:\\Users\\4S\\PycharmProjects\\Fast_dtw\\TestingFile.csv", csv.ToString());
            csv.Clear();
            InitializeComponent();
        }

        bool closing = false;
        const int skeletonCount = 6; 
        Skeleton[] allSkeletons = new Skeleton[skeletonCount];

        private void Window_Loaded(object sender, RoutedEventArgs e)
        {
            kinectSensorChooser1.KinectSensorChanged += new DependencyPropertyChangedEventHandler(kinectSensorChooser1_KinectSensorChanged);

        }

        void kinectSensorChooser1_KinectSensorChanged(object sender, DependencyPropertyChangedEventArgs e)
        {
            KinectSensor old = (KinectSensor)e.OldValue;

            StopKinect(old);

            KinectSensor sensor = (KinectSensor)e.NewValue;

            if (sensor == null)
            {
                return;
            }

            


            var parameters = new TransformSmoothParameters
            {
                Smoothing = 0.3f,
                Correction = 0.0f,
                Prediction = 0.0f,
                JitterRadius = 1.0f,
                MaxDeviationRadius = 0.5f
            };
            sensor.SkeletonStream.Enable(parameters);

            sensor.SkeletonStream.Enable();

            sensor.AllFramesReady += new EventHandler<AllFramesReadyEventArgs>(sensor_AllFramesReady);
            sensor.DepthStream.Enable(DepthImageFormat.Resolution640x480Fps30); 
            sensor.ColorStream.Enable(ColorImageFormat.RgbResolution640x480Fps30);

            try
            {
                sensor.Start();
            }
            catch (System.IO.IOException)
            {
                kinectSensorChooser1.AppConflictOccurred();
            }
        }

        void sensor_AllFramesReady(object sender, AllFramesReadyEventArgs e)
        {
            if (closing)
            {
                return;
            }

            //Get a skeleton
            Skeleton first =  GetFirstSkeleton(e);

            if (first == null)
            {
                return; 
            }



            //set scaled position
            ScalePosition(headImage, first.Joints[JointType.Head]);
            ScalePosition(leftEllipse, first.Joints[JointType.HandLeft]);
            ScalePosition(rightEllipse, first.Joints[JointType.HandRight]);
            ScalePosition(Lelb, first.Joints[JointType.ElbowLeft]);
            ScalePosition(Relb, first.Joints[JointType.ElbowRight]);
            ScalePosition(Lshoulder, first.Joints[JointType.ShoulderLeft]);
            ScalePosition(Rshoulder, first.Joints[JointType.ShoulderRight]);
            ScalePosition(back1, first.Joints[JointType.Spine]);
            ScalePosition(back2, first.Joints[JointType.HipCenter]);



            GetCameraPoint(first, e); 

        }

        void GetCameraPoint(Skeleton first, AllFramesReadyEventArgs e)
        {

            using (DepthImageFrame depth = e.OpenDepthImageFrame())
            {
                if (depth == null ||
                    kinectSensorChooser1.Kinect == null)
                {

                    return;
                }


                //Map a joint location to a point on the depth map
                //head
                DepthImagePoint headDepthPoint =
                    depth.MapFromSkeletonPoint(first.Joints[JointType.Head].Position);
                //left hand
                DepthImagePoint leftDepthPoint =
                    depth.MapFromSkeletonPoint(first.Joints[JointType.HandLeft].Position);
                //right hand
                DepthImagePoint rightDepthPoint =
                    depth.MapFromSkeletonPoint(first.Joints[JointType.HandRight].Position);

                DepthImagePoint elbowleft =
                    depth.MapFromSkeletonPoint(first.Joints[JointType.ElbowLeft].Position);

                DepthImagePoint elbowright =
                    depth.MapFromSkeletonPoint(first.Joints[JointType.ElbowRight].Position);

                DepthImagePoint shoulderleft =
                  depth.MapFromSkeletonPoint(first.Joints[JointType.ShoulderLeft].Position);

                DepthImagePoint shoulderright =
                    depth.MapFromSkeletonPoint(first.Joints[JointType.ShoulderRight].Position);

                DepthImagePoint spine =
                depth.MapFromSkeletonPoint(first.Joints[JointType.Spine].Position);

                DepthImagePoint hipcenter =
                    depth.MapFromSkeletonPoint(first.Joints[JointType.HipCenter].Position);












                array[0] = first.Joints[JointType.HandLeft].Position.X;
                array[1] = first.Joints[JointType.HandLeft].Position.Y;
                array[2] = first.Joints[JointType.HandLeft].Position.Z;

                array[3] = first.Joints[JointType.HandRight].Position.X;
                array[4] = first.Joints[JointType.HandRight].Position.Y;
                array[5] = first.Joints[JointType.HandRight].Position.Z;


                array[6] = first.Joints[JointType.ElbowLeft].Position.X;
                array[7] = first.Joints[JointType.ElbowLeft].Position.Y;
                array[8] = first.Joints[JointType.ElbowLeft].Position.Z;

                array[9] = first.Joints[JointType.ElbowRight].Position.X;
                array[10] = first.Joints[JointType.ElbowRight].Position.Y;
                array[11] = first.Joints[JointType.ElbowRight].Position.Z;

                array[12] = first.Joints[JointType.ShoulderLeft].Position.X;
                array[13] = first.Joints[JointType.ShoulderLeft].Position.Y;
                array[14] = first.Joints[JointType.ShoulderLeft].Position.Z;

                array[15] = first.Joints[JointType.ShoulderRight].Position.X;
                array[16] = first.Joints[JointType.ShoulderRight].Position.Y;
                array[17] = first.Joints[JointType.ShoulderRight].Position.Z;

                array[18] = first.Joints[JointType.Spine].Position.X;
                array[19] = first.Joints[JointType.Spine].Position.Y;
                array[20] = first.Joints[JointType.Spine].Position.Z;

                array[21] = first.Joints[JointType.HipCenter].Position.X;
                array[22] = first.Joints[JointType.HipCenter].Position.Y;
                array[23] = first.Joints[JointType.HipCenter].Position.Z;


                



               // output[1] = output[1] + alpha * (array[0] - output[1]);
              
                
















                //Map a depth point to a point on the color image
                //head
                ColorImagePoint headColorPoint =
                    depth.MapToColorImagePoint(headDepthPoint.X, headDepthPoint.Y,
                    ColorImageFormat.RgbResolution640x480Fps30);
                //left hand
                ColorImagePoint leftColorPoint =
                    depth.MapToColorImagePoint(leftDepthPoint.X, leftDepthPoint.Y,
                    ColorImageFormat.RgbResolution640x480Fps30);
                //right hand
                ColorImagePoint rightColorPoint =
                    depth.MapToColorImagePoint(rightDepthPoint.X, rightDepthPoint.Y,
                    ColorImageFormat.RgbResolution640x480Fps30);



                //left elbow
                ColorImagePoint leftelbowColorPoint =
                    depth.MapToColorImagePoint(elbowleft.X, elbowleft.Y,
                    ColorImageFormat.RgbResolution640x480Fps30);
                //right elbow
                ColorImagePoint rightwlbowColorPoint =
                    depth.MapToColorImagePoint(elbowright.X, elbowright.Y,
                    ColorImageFormat.RgbResolution640x480Fps30);


                //left shoulder
                ColorImagePoint leftshoulderColorPoint =
                    depth.MapToColorImagePoint(shoulderleft.X, shoulderleft.Y,
                    ColorImageFormat.RgbResolution640x480Fps30);
                //right shoulder
                ColorImagePoint rightshoulderColorPoint =
                    depth.MapToColorImagePoint(shoulderright.X, shoulderright.Y,
                    ColorImageFormat.RgbResolution640x480Fps30);



                //spine
                ColorImagePoint spineColorPoint =
                    depth.MapToColorImagePoint(spine.X, spine.Y,
                    ColorImageFormat.RgbResolution640x480Fps30);
                //hip center
                ColorImagePoint hipcenterColorPoint =
                    depth.MapToColorImagePoint(hipcenter.X, hipcenter.Y,
                    ColorImageFormat.RgbResolution640x480Fps30);





                //Set location
                CameraPosition(headImage, headColorPoint);
                CameraPosition(leftEllipse, leftColorPoint);
                CameraPosition(rightEllipse, rightColorPoint);
                CameraPosition(Lelb, leftelbowColorPoint);
                CameraPosition(Relb, rightwlbowColorPoint);
                CameraPosition(Rshoulder, leftshoulderColorPoint);
                CameraPosition(Lshoulder, rightshoulderColorPoint);
                CameraPosition(back1, spineColorPoint);
                CameraPosition(back2, hipcenterColorPoint);


                if(counter < 250)
                {
                    var csv = new StringBuilder();

                    var newLine = string.Format("{0}, {1}, {2}, {3}, {4}, {5}, {6}, {7}, {8}, {9}, {10}, {11}, {12}, {13}, {14}, {15}, {16}, {17}, {18}, {19}, {20}, {21}, {22}, {23}", array[0].ToString(), array[1].ToString(), array[2].ToString(), array[3].ToString(), array[4].ToString(), array[5].ToString(), array[6].ToString(), array[7].ToString(), array[8].ToString(), array[9].ToString(), array[10].ToString(), array[11].ToString(), array[12].ToString(), array[13].ToString(), array[14].ToString(), array[15].ToString(), array[16].ToString(), array[17].ToString(), array[18].ToString(), array[19].ToString(), array[20].ToString(), array[21].ToString(), array[22].ToString(), array[23].ToString());
                    //  var newLine = string.Format("{0},{1}", "hello", "world");
                    csv.AppendLine(newLine);

                    //after your loop
                    File.AppendAllText("C:\\Users\\4S\\PycharmProjects\\Fast_dtw\\TestingFile.csv", csv.ToString());
                    csv.Clear();
                    counter++;
                }

                if (counter==250)
                {
                    counter++;
                    string progToRun = "C:\\Users\\4S\\PycharmProjects\\Fast_dtw\\Fast_dtw workout.py";
                    Process proc = new Process();
                    proc.StartInfo.FileName = "C:\\Program Files\\Python36\\python.exe";
                    proc.StartInfo.Arguments = string.Concat(progToRun);
                    proc.Start();
                }

            }


        }

  


        Skeleton GetFirstSkeleton(AllFramesReadyEventArgs e)
        {
            using (SkeletonFrame skeletonFrameData = e.OpenSkeletonFrame())
            {
                if (skeletonFrameData == null)
                {
                    return null; 
                }

                
                skeletonFrameData.CopySkeletonDataTo(allSkeletons);

                //get the first tracked skeleton
                Skeleton first = (from s in allSkeletons
                                         where s.TrackingState == SkeletonTrackingState.Tracked
                                         select s).FirstOrDefault();

                return first;

            }


        }

        private void StopKinect(KinectSensor sensor)
        {
            if (sensor != null)
            {
                if (sensor.IsRunning)
                {
                    //stop sensor 
                    sensor.Stop();

                    //stop audio if not null
                    if (sensor.AudioSource != null)
                    {
                        sensor.AudioSource.Stop();
                    }


                }
            }


        }

        private void CameraPosition(FrameworkElement element, ColorImagePoint point)
        {
            //Divide by 2 for width and height so point is right in the middle 
            // instead of in top/left corner
            Canvas.SetLeft(element, point.X - element.Width / 2);
            Canvas.SetTop(element, point.Y - element.Height / 2);

        }

        private void ScalePosition(FrameworkElement element, Joint joint)
        {
            //convert the value to X/Y
            //Joint scaledJoint = joint.ScaleTo(1280, 720); 
            
            //convert & scale (.3 = means 1/3 of joint distance)
            Joint scaledJoint = joint.ScaleTo(1280, 720, .3f, .3f);

            Canvas.SetLeft(element, scaledJoint.Position.X);
            Canvas.SetTop(element, scaledJoint.Position.Y); 
            
        }


        private void Window_Closing(object sender, System.ComponentModel.CancelEventArgs e)
        {
            closing = true; 
            StopKinect(kinectSensorChooser1.Kinect); 
        }

        private void KinectSkeletonViewer_Loaded(object sender, RoutedEventArgs e)
        {

        }
    }
}
