import 'package:afiq_s_application2/service/dcd_api_service.dart';
import 'package:afiq_s_application2/models/Schedule.dart';
import 'package:flutter_riverpod/flutter_riverpod.dart';

final dcdRepositoryProvider = Provider<DcdRepository>((ref) {
  final dcdAPIService = ref.read(dcdAPIServiceProvider);
  return DcdRepository(dcdAPIService);
});

class DcdRepository {
  DcdRepository(this.dcdAPIService);

  final DcdAPIService dcdAPIService;

  Future<List<Schedule>> getSchedules() {
    return dcdAPIService.getSchedules();
  }

  Future<List<Schedule>> getPastSchedules() {
    return dcdAPIService.getPastSchedules();
  }

  Future<void> add(Schedule Schedule) async {
    return dcdAPIService.addSchedule(Schedule);
  }

  Future<void> update(Schedule updatedSchedule) async {
    return dcdAPIService.updateSchedule(updatedSchedule);
  }

  Future<void> delete(Schedule deletedSchedule) async {
    return dcdAPIService.deleteSchedule(deletedSchedule);
  }

  Future<Schedule> getSchedule(String ScheduleId) async {
    return dcdAPIService.getSchedule(ScheduleId);
  }
}