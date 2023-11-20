import 'dart:async';

import 'package:amplify_api/amplify_api.dart';
import 'package:amplify_flutter/amplify_flutter.dart';
import 'package:afiq_s_application2/models/ModelProvider.dart';
import 'package:flutter_riverpod/flutter_riverpod.dart';

final dcdAPIServiceProvider = Provider<DcdAPIService>((ref) {
  final service = DcdAPIService();
  return service;
});

class DcdAPIService {
  DcdAPIService();

  Future<List<Schedule>> getSchedules() async {
    try {
      final request = ModelQueries.list(Schedule.classType);
      final response = await Amplify.API.query(request: request).response;

      final schedules = response.data?.items;
      if (schedules == null) {
        safePrint('getSchedules errors: ${response.errors}');
        return const [];
      }
      schedules.sort(
        (a, b) =>
            a!.startDate.getDateTime().compareTo(b!.startDate.getDateTime()),
      );
      return schedules
          .map((e) => e as Schedule)
          .where(
            (element) => element.endDate.getDateTime().isAfter(DateTime.now()),
          )
          .toList();
    } on Exception catch (error) {
      safePrint('getSchedules failed: $error');

      return const [];
    }
  }

  Future<List<Schedule>> getPastSchedules() async {
    try {
      final request = ModelQueries.list(Schedule.classType);
      final response = await Amplify.API.query(request: request).response;

      final schedules = response.data?.items;
      if (schedules == null) {
        safePrint('getPastSchedules errors: ${response.errors}');
        return const [];
      }
      schedules.sort(
        (a, b) =>
            a!.startDate.getDateTime().compareTo(b!.startDate.getDateTime()),
      );
      return schedules
          .map((e) => e as Schedule)
          .where(
            (element) => element.endDate.getDateTime().isBefore(DateTime.now()),
          )
          .toList();
    } on Exception catch (error) {
      safePrint('getPastSchedules failed: $error');

      return const [];
    }
  }

  Future<void> addSchedule(Schedule schedule) async {
    try {
      final request = ModelMutations.create(schedule);
      final response = await Amplify.API.mutate(request: request).response;

      final createdSchedule = response.data;
      if (createdSchedule == null) {
        safePrint('addSchedule errors: ${response.errors}');
        return;
      }
    } on Exception catch (error) {
      safePrint('addSchedule failed: $error');
    }
  }

  Future<void> deleteSchedule(Schedule schedule) async {
    try {
      await Amplify.API
          .mutate(
            request: ModelMutations.delete(schedule),
          )
          .response;
    } on Exception catch (error) {
      safePrint('deleteSchedule failed: $error');
    }
  }

  Future<void> updateSchedule(Schedule updatedSchedule) async {
    try {
      await Amplify.API
          .mutate(
            request: ModelMutations.update(updatedSchedule),
          )
          .response;
    } on Exception catch (error) {
      safePrint('updateSchedule failed: $error');
    }
  }

  Future<Schedule> getSchedule(String scheduleId) async {
    try {
      final request = ModelQueries.get(
        Schedule.classType,
        ScheduleModelIdentifier(id: scheduleId),
      );
      final response = await Amplify.API.query(request: request).response;

      final schedule = response.data!;
      return schedule;
    } on Exception catch (error) {
      safePrint('getSchedule failed: $error');
      rethrow;
    }
  }
}