   M S B A M L   `   `   `  ����^  ZMicrosoft.Samples.Kinect.WpfViewers, Version=0.0.0.0, Culture=neutral, PublicKeyToken=null�^clr-namespace:Microsoft.Samples.Kinect.WpfViewers;assembly=Microsoft.Samples.Kinect.WpfViewers#Microsoft.Samples.Kinect.WpfViewers  5   	    SkeletalTracking!   SkeletalTracking.MainWindow   5   	   \ XPresentationFramework, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35R NWindowsBase, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35W SPresentationCore, Version=4.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35D 9http://schemas.microsoft.com/winfx/2006/xaml/presentation    5   	   R NSystem.Xaml, Version=4.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089:x,http://schemas.microsoft.com/winfx/2006/xaml     5   	   mmy^clr-namespace:Microsoft.Samples.Kinect.WpfViewers;assembly=Microsoft.Samples.Kinect.WpfViewers     5   	   -   5          � Title$  
MainWindow��5   	   $	��600��6   $��1496.947��6)    � WindowState$ 	Maximized=�5   "   .��5      �� -   5        $��
MainCanvas��5      .+�5   
   ;   5Microsoft.Samples.Kinect.WpfViewers.KinectColorViewer  -   5        $��kinectColorViewer1��5   W    �� Left$ 0��6   
 �� Top$ 0��6/   $	��640��6>   $	��480��6J   5   /Microsoft.Samples.Kinect.WpfViewers.ImageViewer   Kinect 5	      ��  �� ElementName$ kinectSensorChooser1�� �� Path$ Kinect�A� 5
   
   -   5        $��leftEllipse��5
   =   $ 0��6   $ 0��6"   $��50��61   $��50��6Q   ���	#FF100D15 J� Opacity$ 1Q�6m   
�������6y   A� 5   
   -   5        $��rightEllipse��5   P   $	 100��6   $ 0��6$   ���	#FF151D20$��50��6D   $��50��6d   $ 1Q�6o   
�������6{   =   7Microsoft.Samples.Kinect.WpfViewers.KinectSensorChooser  5   
   -   5        $��kinectSensorChooser1��5   D   $	 250��6!   $	 380��63   $	��328��6`   A� 5   
   -   5         A�Name$ 	headImage��5      ���	#FF1F1A03$��39��66   $	 200��6B   ���	#FFA91414$ 90��6g   $��47��6w   A� 5   
   -   5        $
 Lelb��5      ���	#FF1F1A03$��39��61   $	 349��6=   ���	#FFA91414$ 90��6b   $��47��6r   A� 5   
   -	   5        $
 Relb��5      ���	#FF311E08$��44��61   $	 433��6=   ���	#FF132615$	 227��6b   $��46��6s   A� 5   
   -
   5        $ 	Rshoulder��5      ���	#FF111B1F$��49��66   $	 349��6B   
�������$	 250��6c   $��47��6t   A� 5   
   -   5        $ 	Lshoulder��5      ���	#FF111B1F$��49��66   $	 531��6B   
�������$	 271��6c   $��47��6t   A� 5   
   -   5        $ back1��5      ���	#FF111B1F$��49��62   $	 221��6>   
�������$	 250��6_   $��44��6p   A� 5   
   -   5        $ back2��5      ���	#FF111B1F$��46��62   $	 290��6>   
�������$	 293��6_   $��44��6p   	 J� RenderTransformOrigin$	 2.091,-2.774&�6{     5   
   $	��560��6   $	 -22��6,   $	��806��6>   >   8Microsoft.Samples.Kinect.WpfViewers.KinectSkeletonViewer  5   
   -   5        $	��441��5   "   $	 850��6/   $ 39��6A   $	��583��6Q    6�   �� $ kinectSensorChooser1��$ Kinect�5      5      