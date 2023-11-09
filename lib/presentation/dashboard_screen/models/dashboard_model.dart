// ignore_for_file: must_be_immutable

import 'package:equatable/equatable.dart';
import 'eighteen_item_model.dart';
import 'doctor_item_model.dart';

/// This class defines the variables used in the [dashboard_screen],
/// and is typically used to hold data that is passed between different parts of the application.
class DashboardModel extends Equatable {
  DashboardModel({
    this.eighteenItemList = const [],
    this.doctorItemList = const [],
  });

  List<EighteenItemModel> eighteenItemList;

  List<DoctorItemModel> doctorItemList;

  DashboardModel copyWith({
    List<EighteenItemModel>? eighteenItemList,
    List<DoctorItemModel>? doctorItemList,
  }) {
    return DashboardModel(
      eighteenItemList: eighteenItemList ?? this.eighteenItemList,
      doctorItemList: doctorItemList ?? this.doctorItemList,
    );
  }

  @override
  List<Object?> get props => [eighteenItemList, doctorItemList];
}
